<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApproverBasicDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApproverBasicDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * nameCn  **参数解释：** 中文名。 **取值范围：** 不涉及。
    * email  **参数解释：** 邮件。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 - optional，可选（审核人、检视人）（未审核/检视） - required，必选（审核人、检视人）（未审核/检视） - approve，审核通过 - true，检视通过 - passed，审核/检视 通过，（未审核/检视） - reject，审核拒绝
    * updatedAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * approverComment  **参数解释：** 审核备注。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'username' => 'string',
            'nameCn' => 'string',
            'email' => 'string',
            'state' => 'string',
            'updatedAt' => 'string',
            'avatarUrl' => 'string',
            'nickName' => 'string',
            'tenantName' => 'string',
            'approverComment' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * nameCn  **参数解释：** 中文名。 **取值范围：** 不涉及。
    * email  **参数解释：** 邮件。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 - optional，可选（审核人、检视人）（未审核/检视） - required，必选（审核人、检视人）（未审核/检视） - approve，审核通过 - true，检视通过 - passed，审核/检视 通过，（未审核/检视） - reject，审核拒绝
    * updatedAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * approverComment  **参数解释：** 审核备注。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'username' => null,
        'nameCn' => null,
        'email' => null,
        'state' => null,
        'updatedAt' => null,
        'avatarUrl' => null,
        'nickName' => null,
        'tenantName' => null,
        'approverComment' => null
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
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * nameCn  **参数解释：** 中文名。 **取值范围：** 不涉及。
    * email  **参数解释：** 邮件。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 - optional，可选（审核人、检视人）（未审核/检视） - required，必选（审核人、检视人）（未审核/检视） - approve，审核通过 - true，检视通过 - passed，审核/检视 通过，（未审核/检视） - reject，审核拒绝
    * updatedAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * approverComment  **参数解释：** 审核备注。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'username' => 'username',
            'nameCn' => 'name_cn',
            'email' => 'email',
            'state' => 'state',
            'updatedAt' => 'updated_at',
            'avatarUrl' => 'avatar_url',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name',
            'approverComment' => 'approver_comment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * nameCn  **参数解释：** 中文名。 **取值范围：** 不涉及。
    * email  **参数解释：** 邮件。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 - optional，可选（审核人、检视人）（未审核/检视） - required，必选（审核人、检视人）（未审核/检视） - approve，审核通过 - true，检视通过 - passed，审核/检视 通过，（未审核/检视） - reject，审核拒绝
    * updatedAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * approverComment  **参数解释：** 审核备注。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'username' => 'setUsername',
            'nameCn' => 'setNameCn',
            'email' => 'setEmail',
            'state' => 'setState',
            'updatedAt' => 'setUpdatedAt',
            'avatarUrl' => 'setAvatarUrl',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName',
            'approverComment' => 'setApproverComment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * nameCn  **参数解释：** 中文名。 **取值范围：** 不涉及。
    * email  **参数解释：** 邮件。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 - optional，可选（审核人、检视人）（未审核/检视） - required，必选（审核人、检视人）（未审核/检视） - approve，审核通过 - true，检视通过 - passed，审核/检视 通过，（未审核/检视） - reject，审核拒绝
    * updatedAt  **参数解释：** 更新时间 **取值范围：** 不涉及。
    * avatarUrl  **参数解释：** 头像链接 **取值范围：** 不涉及。
    * nickName  **参数解释：** 昵称 **取值范围：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    * approverComment  **参数解释：** 审核备注。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'username' => 'getUsername',
            'nameCn' => 'getNameCn',
            'email' => 'getEmail',
            'state' => 'getState',
            'updatedAt' => 'getUpdatedAt',
            'avatarUrl' => 'getAvatarUrl',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName',
            'approverComment' => 'getApproverComment'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['approverComment'] = isset($data['approverComment']) ? $data['approverComment'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 255)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 用户id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 用户id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 用户名称。
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
    * @param string|null $name **参数解释：** 用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets username
    *  **参数解释：** 用户名。
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username **参数解释：** 用户名。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets nameCn
    *  **参数解释：** 中文名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn **参数解释：** 中文名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets email
    *  **参数解释：** 邮件。 **取值范围：** 不涉及。
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
    * @param string|null $email **参数解释：** 邮件。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 状态。 - optional，可选（审核人、检视人）（未审核/检视） - required，必选（审核人、检视人）（未审核/检视） - approve，审核通过 - true，检视通过 - passed，审核/检视 通过，（未审核/检视） - reject，审核拒绝
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
    * @param string|null $state **参数解释：** 状态。 - optional，可选（审核人、检视人）（未审核/检视） - required，必选（审核人、检视人）（未审核/检视） - approve，审核通过 - true，检视通过 - passed，审核/检视 通过，（未审核/检视） - reject，审核拒绝
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间 **取值范围：** 不涉及。
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
    * @param string|null $updatedAt **参数解释：** 更新时间 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets avatarUrl
    *  **参数解释：** 头像链接 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
    * Sets avatarUrl
    *
    * @param string|null $avatarUrl **参数解释：** 头像链接 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释：** 昵称 **取值范围：** 不涉及。
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
    * @param string|null $nickName **参数解释：** 昵称 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  **参数解释：** 租户名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName **参数解释：** 租户名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets approverComment
    *  **参数解释：** 审核备注。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getApproverComment()
    {
        return $this->container['approverComment'];
    }

    /**
    * Sets approverComment
    *
    * @param string|null $approverComment **参数解释：** 审核备注。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setApproverComment($approverComment)
    {
        $this->container['approverComment'] = $approverComment;
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

