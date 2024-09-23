<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HandshakeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HandshakeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  邀请（握手）的唯一标识符（ID）。源账号在发起邀请（握手）时创建ID。
    * urn  邀请（握手）的统一资源名称。
    * updatedAt  邀请（握手）请求被接受、取消、拒绝或到期的日期和时间。
    * createdAt  提出邀请（握手）请求的日期和时间。
    * expiredAt  邀请（握手）过期的日期和时间。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织管理账号的名称。
    * organizationId  组织的唯一标识符（ID）。
    * notes  给收件账号所有者的邮件中的附加信息。
    * target  target
    * status  邀请（握手）的当前状态, pending：邀请中；accepted：接受邀请；cancelled：取消邀请；declined：拒绝邀请；expired：邀请过期。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'urn' => 'string',
            'updatedAt' => '\DateTime',
            'createdAt' => '\DateTime',
            'expiredAt' => '\DateTime',
            'managementAccountId' => 'string',
            'managementAccountName' => 'string',
            'organizationId' => 'string',
            'notes' => 'string',
            'target' => '\HuaweiCloud\SDK\Organizations\V1\Model\TargetDto',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  邀请（握手）的唯一标识符（ID）。源账号在发起邀请（握手）时创建ID。
    * urn  邀请（握手）的统一资源名称。
    * updatedAt  邀请（握手）请求被接受、取消、拒绝或到期的日期和时间。
    * createdAt  提出邀请（握手）请求的日期和时间。
    * expiredAt  邀请（握手）过期的日期和时间。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织管理账号的名称。
    * organizationId  组织的唯一标识符（ID）。
    * notes  给收件账号所有者的邮件中的附加信息。
    * target  target
    * status  邀请（握手）的当前状态, pending：邀请中；accepted：接受邀请；cancelled：取消邀请；declined：拒绝邀请；expired：邀请过期。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'urn' => null,
        'updatedAt' => 'date-time',
        'createdAt' => 'date-time',
        'expiredAt' => 'date-time',
        'managementAccountId' => null,
        'managementAccountName' => null,
        'organizationId' => null,
        'notes' => null,
        'target' => null,
        'status' => null
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
    * id  邀请（握手）的唯一标识符（ID）。源账号在发起邀请（握手）时创建ID。
    * urn  邀请（握手）的统一资源名称。
    * updatedAt  邀请（握手）请求被接受、取消、拒绝或到期的日期和时间。
    * createdAt  提出邀请（握手）请求的日期和时间。
    * expiredAt  邀请（握手）过期的日期和时间。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织管理账号的名称。
    * organizationId  组织的唯一标识符（ID）。
    * notes  给收件账号所有者的邮件中的附加信息。
    * target  target
    * status  邀请（握手）的当前状态, pending：邀请中；accepted：接受邀请；cancelled：取消邀请；declined：拒绝邀请；expired：邀请过期。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'urn' => 'urn',
            'updatedAt' => 'updated_at',
            'createdAt' => 'created_at',
            'expiredAt' => 'expired_at',
            'managementAccountId' => 'management_account_id',
            'managementAccountName' => 'management_account_name',
            'organizationId' => 'organization_id',
            'notes' => 'notes',
            'target' => 'target',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  邀请（握手）的唯一标识符（ID）。源账号在发起邀请（握手）时创建ID。
    * urn  邀请（握手）的统一资源名称。
    * updatedAt  邀请（握手）请求被接受、取消、拒绝或到期的日期和时间。
    * createdAt  提出邀请（握手）请求的日期和时间。
    * expiredAt  邀请（握手）过期的日期和时间。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织管理账号的名称。
    * organizationId  组织的唯一标识符（ID）。
    * notes  给收件账号所有者的邮件中的附加信息。
    * target  target
    * status  邀请（握手）的当前状态, pending：邀请中；accepted：接受邀请；cancelled：取消邀请；declined：拒绝邀请；expired：邀请过期。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'urn' => 'setUrn',
            'updatedAt' => 'setUpdatedAt',
            'createdAt' => 'setCreatedAt',
            'expiredAt' => 'setExpiredAt',
            'managementAccountId' => 'setManagementAccountId',
            'managementAccountName' => 'setManagementAccountName',
            'organizationId' => 'setOrganizationId',
            'notes' => 'setNotes',
            'target' => 'setTarget',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  邀请（握手）的唯一标识符（ID）。源账号在发起邀请（握手）时创建ID。
    * urn  邀请（握手）的统一资源名称。
    * updatedAt  邀请（握手）请求被接受、取消、拒绝或到期的日期和时间。
    * createdAt  提出邀请（握手）请求的日期和时间。
    * expiredAt  邀请（握手）过期的日期和时间。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织管理账号的名称。
    * organizationId  组织的唯一标识符（ID）。
    * notes  给收件账号所有者的邮件中的附加信息。
    * target  target
    * status  邀请（握手）的当前状态, pending：邀请中；accepted：接受邀请；cancelled：取消邀请；declined：拒绝邀请；expired：邀请过期。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'urn' => 'getUrn',
            'updatedAt' => 'getUpdatedAt',
            'createdAt' => 'getCreatedAt',
            'expiredAt' => 'getExpiredAt',
            'managementAccountId' => 'getManagementAccountId',
            'managementAccountName' => 'getManagementAccountName',
            'organizationId' => 'getOrganizationId',
            'notes' => 'getNotes',
            'target' => 'getTarget',
            'status' => 'getStatus'
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
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['expiredAt'] = isset($data['expiredAt']) ? $data['expiredAt'] : null;
        $this->container['managementAccountId'] = isset($data['managementAccountId']) ? $data['managementAccountId'] : null;
        $this->container['managementAccountName'] = isset($data['managementAccountName']) ? $data['managementAccountName'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 34)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^h-[0-9a-z]{8,32}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^h-[0-9a-z]{8,32}$/.";
            }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
            if ((mb_strlen($this->container['urn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1500.";
            }
            if ((mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['expiredAt'] === null) {
            $invalidProperties[] = "'expiredAt' can't be null";
        }
        if ($this->container['managementAccountId'] === null) {
            $invalidProperties[] = "'managementAccountId' can't be null";
        }
            if ((mb_strlen($this->container['managementAccountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'managementAccountId', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['managementAccountId'])) {
                $invalidProperties[] = "invalid value for 'managementAccountId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['managementAccountName'] === null) {
            $invalidProperties[] = "'managementAccountName' can't be null";
        }
            if ((mb_strlen($this->container['managementAccountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'managementAccountName', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/", $this->container['managementAccountName'])) {
                $invalidProperties[] = "invalid value for 'managementAccountName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/.";
            }
        if ($this->container['organizationId'] === null) {
            $invalidProperties[] = "'organizationId' can't be null";
        }
            if ((mb_strlen($this->container['organizationId']) > 34)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^o-[0-9a-z]{10,32}$/", $this->container['organizationId'])) {
                $invalidProperties[] = "invalid value for 'organizationId', must be conform to the pattern /^o-[0-9a-z]{10,32}$/.";
            }
        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }
            if ((mb_strlen($this->container['notes']) > 1024)) {
                $invalidProperties[] = "invalid value for 'notes', the character length must be smaller than or equal to 1024.";
            }
            if (!preg_match("/^[\\s\\S]*$/", $this->container['notes'])) {
                $invalidProperties[] = "invalid value for 'notes', must be conform to the pattern /^[\\s\\S]*$/.";
            }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    *  邀请（握手）的唯一标识符（ID）。源账号在发起邀请（握手）时创建ID。
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
    * @param string $id 邀请（握手）的唯一标识符（ID）。源账号在发起邀请（握手）时创建ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets urn
    *  邀请（握手）的统一资源名称。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 邀请（握手）的统一资源名称。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets updatedAt
    *  邀请（握手）请求被接受、取消、拒绝或到期的日期和时间。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 邀请（握手）请求被接受、取消、拒绝或到期的日期和时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets createdAt
    *  提出邀请（握手）请求的日期和时间。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 提出邀请（握手）请求的日期和时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets expiredAt
    *  邀请（握手）过期的日期和时间。
    *
    * @return \DateTime
    */
    public function getExpiredAt()
    {
        return $this->container['expiredAt'];
    }

    /**
    * Sets expiredAt
    *
    * @param \DateTime $expiredAt 邀请（握手）过期的日期和时间。
    *
    * @return $this
    */
    public function setExpiredAt($expiredAt)
    {
        $this->container['expiredAt'] = $expiredAt;
        return $this;
    }

    /**
    * Gets managementAccountId
    *  组织管理账号的唯一标识符（ID）。
    *
    * @return string
    */
    public function getManagementAccountId()
    {
        return $this->container['managementAccountId'];
    }

    /**
    * Sets managementAccountId
    *
    * @param string $managementAccountId 组织管理账号的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setManagementAccountId($managementAccountId)
    {
        $this->container['managementAccountId'] = $managementAccountId;
        return $this;
    }

    /**
    * Gets managementAccountName
    *  组织管理账号的名称。
    *
    * @return string
    */
    public function getManagementAccountName()
    {
        return $this->container['managementAccountName'];
    }

    /**
    * Sets managementAccountName
    *
    * @param string $managementAccountName 组织管理账号的名称。
    *
    * @return $this
    */
    public function setManagementAccountName($managementAccountName)
    {
        $this->container['managementAccountName'] = $managementAccountName;
        return $this;
    }

    /**
    * Gets organizationId
    *  组织的唯一标识符（ID）。
    *
    * @return string
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string $organizationId 组织的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets notes
    *  给收件账号所有者的邮件中的附加信息。
    *
    * @return string
    */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
    * Sets notes
    *
    * @param string $notes 给收件账号所有者的邮件中的附加信息。
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
        return $this;
    }

    /**
    * Gets target
    *  target
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\TargetDto
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\TargetDto $target target
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets status
    *  邀请（握手）的当前状态, pending：邀请中；accepted：接受邀请；cancelled：取消邀请；declined：拒绝邀请；expired：邀请过期。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 邀请（握手）的当前状态, pending：邀请中；accepted：接受邀请；cancelled：取消邀请；declined：拒绝邀请；expired：邀请过期。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

