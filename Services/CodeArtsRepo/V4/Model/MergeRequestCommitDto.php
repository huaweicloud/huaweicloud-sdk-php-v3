<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestCommitDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestCommitDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  commit id
    * shortId  commit 短id
    * title  提交标题
    * message  提交信息
    * authorName  commit 作者名称
    * name  用户名
    * userName  用户名
    * tenantName  租户名
    * nickName  昵称
    * authoredDate  最初commit 提交日期（本地提交日期）
    * committedDate  commit提交日期（推送至仓库日期）
    * committerName  commit 提交者名称
    * gpgPrimaryKeyId  pgp key id
    * openGpgVerified  gpg公钥验证是否开启
    * verificationStatus  gpg公钥验证是否通过
    * parentIds  提交父commit节点
    * createdAt  commit 数据库记录创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'shortId' => 'string',
            'title' => 'string',
            'message' => 'string',
            'authorName' => 'string',
            'name' => 'string',
            'userName' => 'string',
            'tenantName' => 'string',
            'nickName' => 'string',
            'authoredDate' => 'string',
            'committedDate' => 'string',
            'committerName' => 'string',
            'gpgPrimaryKeyId' => 'string',
            'openGpgVerified' => 'bool',
            'verificationStatus' => 'bool',
            'parentIds' => 'string[]',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  commit id
    * shortId  commit 短id
    * title  提交标题
    * message  提交信息
    * authorName  commit 作者名称
    * name  用户名
    * userName  用户名
    * tenantName  租户名
    * nickName  昵称
    * authoredDate  最初commit 提交日期（本地提交日期）
    * committedDate  commit提交日期（推送至仓库日期）
    * committerName  commit 提交者名称
    * gpgPrimaryKeyId  pgp key id
    * openGpgVerified  gpg公钥验证是否开启
    * verificationStatus  gpg公钥验证是否通过
    * parentIds  提交父commit节点
    * createdAt  commit 数据库记录创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'shortId' => null,
        'title' => null,
        'message' => null,
        'authorName' => null,
        'name' => null,
        'userName' => null,
        'tenantName' => null,
        'nickName' => null,
        'authoredDate' => null,
        'committedDate' => null,
        'committerName' => null,
        'gpgPrimaryKeyId' => null,
        'openGpgVerified' => null,
        'verificationStatus' => null,
        'parentIds' => null,
        'createdAt' => null
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
    * id  commit id
    * shortId  commit 短id
    * title  提交标题
    * message  提交信息
    * authorName  commit 作者名称
    * name  用户名
    * userName  用户名
    * tenantName  租户名
    * nickName  昵称
    * authoredDate  最初commit 提交日期（本地提交日期）
    * committedDate  commit提交日期（推送至仓库日期）
    * committerName  commit 提交者名称
    * gpgPrimaryKeyId  pgp key id
    * openGpgVerified  gpg公钥验证是否开启
    * verificationStatus  gpg公钥验证是否通过
    * parentIds  提交父commit节点
    * createdAt  commit 数据库记录创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'shortId' => 'short_id',
            'title' => 'title',
            'message' => 'message',
            'authorName' => 'author_name',
            'name' => 'name',
            'userName' => 'user_name',
            'tenantName' => 'tenant_name',
            'nickName' => 'nick_name',
            'authoredDate' => 'authored_date',
            'committedDate' => 'committed_date',
            'committerName' => 'committer_name',
            'gpgPrimaryKeyId' => 'gpg_primary_key_id',
            'openGpgVerified' => 'open_gpg_verified',
            'verificationStatus' => 'verification_status',
            'parentIds' => 'parent_ids',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  commit id
    * shortId  commit 短id
    * title  提交标题
    * message  提交信息
    * authorName  commit 作者名称
    * name  用户名
    * userName  用户名
    * tenantName  租户名
    * nickName  昵称
    * authoredDate  最初commit 提交日期（本地提交日期）
    * committedDate  commit提交日期（推送至仓库日期）
    * committerName  commit 提交者名称
    * gpgPrimaryKeyId  pgp key id
    * openGpgVerified  gpg公钥验证是否开启
    * verificationStatus  gpg公钥验证是否通过
    * parentIds  提交父commit节点
    * createdAt  commit 数据库记录创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'shortId' => 'setShortId',
            'title' => 'setTitle',
            'message' => 'setMessage',
            'authorName' => 'setAuthorName',
            'name' => 'setName',
            'userName' => 'setUserName',
            'tenantName' => 'setTenantName',
            'nickName' => 'setNickName',
            'authoredDate' => 'setAuthoredDate',
            'committedDate' => 'setCommittedDate',
            'committerName' => 'setCommitterName',
            'gpgPrimaryKeyId' => 'setGpgPrimaryKeyId',
            'openGpgVerified' => 'setOpenGpgVerified',
            'verificationStatus' => 'setVerificationStatus',
            'parentIds' => 'setParentIds',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  commit id
    * shortId  commit 短id
    * title  提交标题
    * message  提交信息
    * authorName  commit 作者名称
    * name  用户名
    * userName  用户名
    * tenantName  租户名
    * nickName  昵称
    * authoredDate  最初commit 提交日期（本地提交日期）
    * committedDate  commit提交日期（推送至仓库日期）
    * committerName  commit 提交者名称
    * gpgPrimaryKeyId  pgp key id
    * openGpgVerified  gpg公钥验证是否开启
    * verificationStatus  gpg公钥验证是否通过
    * parentIds  提交父commit节点
    * createdAt  commit 数据库记录创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'shortId' => 'getShortId',
            'title' => 'getTitle',
            'message' => 'getMessage',
            'authorName' => 'getAuthorName',
            'name' => 'getName',
            'userName' => 'getUserName',
            'tenantName' => 'getTenantName',
            'nickName' => 'getNickName',
            'authoredDate' => 'getAuthoredDate',
            'committedDate' => 'getCommittedDate',
            'committerName' => 'getCommitterName',
            'gpgPrimaryKeyId' => 'getGpgPrimaryKeyId',
            'openGpgVerified' => 'getOpenGpgVerified',
            'verificationStatus' => 'getVerificationStatus',
            'parentIds' => 'getParentIds',
            'createdAt' => 'getCreatedAt'
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
        $this->container['shortId'] = isset($data['shortId']) ? $data['shortId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['authoredDate'] = isset($data['authoredDate']) ? $data['authoredDate'] : null;
        $this->container['committedDate'] = isset($data['committedDate']) ? $data['committedDate'] : null;
        $this->container['committerName'] = isset($data['committerName']) ? $data['committerName'] : null;
        $this->container['gpgPrimaryKeyId'] = isset($data['gpgPrimaryKeyId']) ? $data['gpgPrimaryKeyId'] : null;
        $this->container['openGpgVerified'] = isset($data['openGpgVerified']) ? $data['openGpgVerified'] : null;
        $this->container['verificationStatus'] = isset($data['verificationStatus']) ? $data['verificationStatus'] : null;
        $this->container['parentIds'] = isset($data['parentIds']) ? $data['parentIds'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
    * Gets id
    *  commit id
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
    * @param string|null $id commit id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets shortId
    *  commit 短id
    *
    * @return string|null
    */
    public function getShortId()
    {
        return $this->container['shortId'];
    }

    /**
    * Sets shortId
    *
    * @param string|null $shortId commit 短id
    *
    * @return $this
    */
    public function setShortId($shortId)
    {
        $this->container['shortId'] = $shortId;
        return $this;
    }

    /**
    * Gets title
    *  提交标题
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
    * @param string|null $title 提交标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets message
    *  提交信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 提交信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets authorName
    *  commit 作者名称
    *
    * @return string|null
    */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
    * Sets authorName
    *
    * @param string|null $authorName commit 作者名称
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets name
    *  用户名
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
    * @param string|null $name 用户名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
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
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets tenantName
    *  租户名
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
    * @param string|null $tenantName 租户名
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets nickName
    *  昵称
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
    * @param string|null $nickName 昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets authoredDate
    *  最初commit 提交日期（本地提交日期）
    *
    * @return string|null
    */
    public function getAuthoredDate()
    {
        return $this->container['authoredDate'];
    }

    /**
    * Sets authoredDate
    *
    * @param string|null $authoredDate 最初commit 提交日期（本地提交日期）
    *
    * @return $this
    */
    public function setAuthoredDate($authoredDate)
    {
        $this->container['authoredDate'] = $authoredDate;
        return $this;
    }

    /**
    * Gets committedDate
    *  commit提交日期（推送至仓库日期）
    *
    * @return string|null
    */
    public function getCommittedDate()
    {
        return $this->container['committedDate'];
    }

    /**
    * Sets committedDate
    *
    * @param string|null $committedDate commit提交日期（推送至仓库日期）
    *
    * @return $this
    */
    public function setCommittedDate($committedDate)
    {
        $this->container['committedDate'] = $committedDate;
        return $this;
    }

    /**
    * Gets committerName
    *  commit 提交者名称
    *
    * @return string|null
    */
    public function getCommitterName()
    {
        return $this->container['committerName'];
    }

    /**
    * Sets committerName
    *
    * @param string|null $committerName commit 提交者名称
    *
    * @return $this
    */
    public function setCommitterName($committerName)
    {
        $this->container['committerName'] = $committerName;
        return $this;
    }

    /**
    * Gets gpgPrimaryKeyId
    *  pgp key id
    *
    * @return string|null
    */
    public function getGpgPrimaryKeyId()
    {
        return $this->container['gpgPrimaryKeyId'];
    }

    /**
    * Sets gpgPrimaryKeyId
    *
    * @param string|null $gpgPrimaryKeyId pgp key id
    *
    * @return $this
    */
    public function setGpgPrimaryKeyId($gpgPrimaryKeyId)
    {
        $this->container['gpgPrimaryKeyId'] = $gpgPrimaryKeyId;
        return $this;
    }

    /**
    * Gets openGpgVerified
    *  gpg公钥验证是否开启
    *
    * @return bool|null
    */
    public function getOpenGpgVerified()
    {
        return $this->container['openGpgVerified'];
    }

    /**
    * Sets openGpgVerified
    *
    * @param bool|null $openGpgVerified gpg公钥验证是否开启
    *
    * @return $this
    */
    public function setOpenGpgVerified($openGpgVerified)
    {
        $this->container['openGpgVerified'] = $openGpgVerified;
        return $this;
    }

    /**
    * Gets verificationStatus
    *  gpg公钥验证是否通过
    *
    * @return bool|null
    */
    public function getVerificationStatus()
    {
        return $this->container['verificationStatus'];
    }

    /**
    * Sets verificationStatus
    *
    * @param bool|null $verificationStatus gpg公钥验证是否通过
    *
    * @return $this
    */
    public function setVerificationStatus($verificationStatus)
    {
        $this->container['verificationStatus'] = $verificationStatus;
        return $this;
    }

    /**
    * Gets parentIds
    *  提交父commit节点
    *
    * @return string[]|null
    */
    public function getParentIds()
    {
        return $this->container['parentIds'];
    }

    /**
    * Sets parentIds
    *
    * @param string[]|null $parentIds 提交父commit节点
    *
    * @return $this
    */
    public function setParentIds($parentIds)
    {
        $this->container['parentIds'] = $parentIds;
        return $this;
    }

    /**
    * Gets createdAt
    *  commit 数据库记录创建时间
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
    * @param string|null $createdAt commit 数据库记录创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

