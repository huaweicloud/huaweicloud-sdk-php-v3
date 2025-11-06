<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryCommitDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryCommitDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * message  消息
    * parentIds  父节点提交ID
    * authoredDate  创建该分支的时间
    * authorName  创建者名称
    * authorEmail  创建者邮箱
    * committedDate  代码提交的日期和时间
    * committerName  提交者名称
    * committerEmail  提交者邮箱
    * openGpgVerified  是否打开gpg校验
    * verificationStatus  验证状态
    * gpgPrimaryKeyId  GPG公钥的标识符
    * name  用户名
    * gpgNickName  昵称
    * gpgTenantName  租户名
    * gpgUserName  特定GPG用户相关的信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'message' => 'string',
            'parentIds' => 'string[]',
            'authoredDate' => 'string',
            'authorName' => 'string',
            'authorEmail' => 'string',
            'committedDate' => 'string',
            'committerName' => 'string',
            'committerEmail' => 'string',
            'openGpgVerified' => 'bool',
            'verificationStatus' => 'int',
            'gpgPrimaryKeyId' => 'string',
            'name' => 'string',
            'gpgNickName' => 'string',
            'gpgTenantName' => 'string',
            'gpgUserName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * message  消息
    * parentIds  父节点提交ID
    * authoredDate  创建该分支的时间
    * authorName  创建者名称
    * authorEmail  创建者邮箱
    * committedDate  代码提交的日期和时间
    * committerName  提交者名称
    * committerEmail  提交者邮箱
    * openGpgVerified  是否打开gpg校验
    * verificationStatus  验证状态
    * gpgPrimaryKeyId  GPG公钥的标识符
    * name  用户名
    * gpgNickName  昵称
    * gpgTenantName  租户名
    * gpgUserName  特定GPG用户相关的信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'message' => null,
        'parentIds' => null,
        'authoredDate' => null,
        'authorName' => null,
        'authorEmail' => null,
        'committedDate' => null,
        'committerName' => null,
        'committerEmail' => null,
        'openGpgVerified' => null,
        'verificationStatus' => null,
        'gpgPrimaryKeyId' => null,
        'name' => null,
        'gpgNickName' => null,
        'gpgTenantName' => null,
        'gpgUserName' => null
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
    * id  id
    * message  消息
    * parentIds  父节点提交ID
    * authoredDate  创建该分支的时间
    * authorName  创建者名称
    * authorEmail  创建者邮箱
    * committedDate  代码提交的日期和时间
    * committerName  提交者名称
    * committerEmail  提交者邮箱
    * openGpgVerified  是否打开gpg校验
    * verificationStatus  验证状态
    * gpgPrimaryKeyId  GPG公钥的标识符
    * name  用户名
    * gpgNickName  昵称
    * gpgTenantName  租户名
    * gpgUserName  特定GPG用户相关的信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'message' => 'message',
            'parentIds' => 'parent_ids',
            'authoredDate' => 'authored_date',
            'authorName' => 'author_name',
            'authorEmail' => 'author_email',
            'committedDate' => 'committed_date',
            'committerName' => 'committer_name',
            'committerEmail' => 'committer_email',
            'openGpgVerified' => 'open_gpg_verified',
            'verificationStatus' => 'verification_status',
            'gpgPrimaryKeyId' => 'gpg_primary_key_id',
            'name' => 'name',
            'gpgNickName' => 'gpg_nick_name',
            'gpgTenantName' => 'gpg_tenant_name',
            'gpgUserName' => 'gpg_user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * message  消息
    * parentIds  父节点提交ID
    * authoredDate  创建该分支的时间
    * authorName  创建者名称
    * authorEmail  创建者邮箱
    * committedDate  代码提交的日期和时间
    * committerName  提交者名称
    * committerEmail  提交者邮箱
    * openGpgVerified  是否打开gpg校验
    * verificationStatus  验证状态
    * gpgPrimaryKeyId  GPG公钥的标识符
    * name  用户名
    * gpgNickName  昵称
    * gpgTenantName  租户名
    * gpgUserName  特定GPG用户相关的信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'message' => 'setMessage',
            'parentIds' => 'setParentIds',
            'authoredDate' => 'setAuthoredDate',
            'authorName' => 'setAuthorName',
            'authorEmail' => 'setAuthorEmail',
            'committedDate' => 'setCommittedDate',
            'committerName' => 'setCommitterName',
            'committerEmail' => 'setCommitterEmail',
            'openGpgVerified' => 'setOpenGpgVerified',
            'verificationStatus' => 'setVerificationStatus',
            'gpgPrimaryKeyId' => 'setGpgPrimaryKeyId',
            'name' => 'setName',
            'gpgNickName' => 'setGpgNickName',
            'gpgTenantName' => 'setGpgTenantName',
            'gpgUserName' => 'setGpgUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * message  消息
    * parentIds  父节点提交ID
    * authoredDate  创建该分支的时间
    * authorName  创建者名称
    * authorEmail  创建者邮箱
    * committedDate  代码提交的日期和时间
    * committerName  提交者名称
    * committerEmail  提交者邮箱
    * openGpgVerified  是否打开gpg校验
    * verificationStatus  验证状态
    * gpgPrimaryKeyId  GPG公钥的标识符
    * name  用户名
    * gpgNickName  昵称
    * gpgTenantName  租户名
    * gpgUserName  特定GPG用户相关的信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'message' => 'getMessage',
            'parentIds' => 'getParentIds',
            'authoredDate' => 'getAuthoredDate',
            'authorName' => 'getAuthorName',
            'authorEmail' => 'getAuthorEmail',
            'committedDate' => 'getCommittedDate',
            'committerName' => 'getCommitterName',
            'committerEmail' => 'getCommitterEmail',
            'openGpgVerified' => 'getOpenGpgVerified',
            'verificationStatus' => 'getVerificationStatus',
            'gpgPrimaryKeyId' => 'getGpgPrimaryKeyId',
            'name' => 'getName',
            'gpgNickName' => 'getGpgNickName',
            'gpgTenantName' => 'getGpgTenantName',
            'gpgUserName' => 'getGpgUserName'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['parentIds'] = isset($data['parentIds']) ? $data['parentIds'] : null;
        $this->container['authoredDate'] = isset($data['authoredDate']) ? $data['authoredDate'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['authorEmail'] = isset($data['authorEmail']) ? $data['authorEmail'] : null;
        $this->container['committedDate'] = isset($data['committedDate']) ? $data['committedDate'] : null;
        $this->container['committerName'] = isset($data['committerName']) ? $data['committerName'] : null;
        $this->container['committerEmail'] = isset($data['committerEmail']) ? $data['committerEmail'] : null;
        $this->container['openGpgVerified'] = isset($data['openGpgVerified']) ? $data['openGpgVerified'] : null;
        $this->container['verificationStatus'] = isset($data['verificationStatus']) ? $data['verificationStatus'] : null;
        $this->container['gpgPrimaryKeyId'] = isset($data['gpgPrimaryKeyId']) ? $data['gpgPrimaryKeyId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['gpgNickName'] = isset($data['gpgNickName']) ? $data['gpgNickName'] : null;
        $this->container['gpgTenantName'] = isset($data['gpgTenantName']) ? $data['gpgTenantName'] : null;
        $this->container['gpgUserName'] = isset($data['gpgUserName']) ? $data['gpgUserName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 100000)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 100000)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authoredDate']) && (mb_strlen($this->container['authoredDate']) > 100000)) {
                $invalidProperties[] = "invalid value for 'authoredDate', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['authoredDate']) && (mb_strlen($this->container['authoredDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'authoredDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorName']) && (mb_strlen($this->container['authorName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'authorName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['authorName']) && (mb_strlen($this->container['authorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorEmail']) && (mb_strlen($this->container['authorEmail']) > 100000)) {
                $invalidProperties[] = "invalid value for 'authorEmail', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['authorEmail']) && (mb_strlen($this->container['authorEmail']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorEmail', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['committedDate']) && (mb_strlen($this->container['committedDate']) > 100000)) {
                $invalidProperties[] = "invalid value for 'committedDate', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['committedDate']) && (mb_strlen($this->container['committedDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'committedDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['committerName']) && (mb_strlen($this->container['committerName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'committerName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['committerName']) && (mb_strlen($this->container['committerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'committerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['committerEmail']) && (mb_strlen($this->container['committerEmail']) > 100000)) {
                $invalidProperties[] = "invalid value for 'committerEmail', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['committerEmail']) && (mb_strlen($this->container['committerEmail']) < 1)) {
                $invalidProperties[] = "invalid value for 'committerEmail', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['verificationStatus']) && ($this->container['verificationStatus'] > 1)) {
                $invalidProperties[] = "invalid value for 'verificationStatus', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['verificationStatus']) && ($this->container['verificationStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'verificationStatus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gpgPrimaryKeyId']) && (mb_strlen($this->container['gpgPrimaryKeyId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'gpgPrimaryKeyId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['gpgPrimaryKeyId']) && (mb_strlen($this->container['gpgPrimaryKeyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'gpgPrimaryKeyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['gpgNickName']) && (mb_strlen($this->container['gpgNickName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'gpgNickName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['gpgNickName']) && (mb_strlen($this->container['gpgNickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'gpgNickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['gpgTenantName']) && (mb_strlen($this->container['gpgTenantName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'gpgTenantName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['gpgTenantName']) && (mb_strlen($this->container['gpgTenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'gpgTenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['gpgUserName']) && (mb_strlen($this->container['gpgUserName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'gpgUserName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['gpgUserName']) && (mb_strlen($this->container['gpgUserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'gpgUserName', the character length must be bigger than or equal to 1.";
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets message
    *  消息
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
    * @param string|null $message 消息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets parentIds
    *  父节点提交ID
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
    * @param string[]|null $parentIds 父节点提交ID
    *
    * @return $this
    */
    public function setParentIds($parentIds)
    {
        $this->container['parentIds'] = $parentIds;
        return $this;
    }

    /**
    * Gets authoredDate
    *  创建该分支的时间
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
    * @param string|null $authoredDate 创建该分支的时间
    *
    * @return $this
    */
    public function setAuthoredDate($authoredDate)
    {
        $this->container['authoredDate'] = $authoredDate;
        return $this;
    }

    /**
    * Gets authorName
    *  创建者名称
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
    * @param string|null $authorName 创建者名称
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets authorEmail
    *  创建者邮箱
    *
    * @return string|null
    */
    public function getAuthorEmail()
    {
        return $this->container['authorEmail'];
    }

    /**
    * Sets authorEmail
    *
    * @param string|null $authorEmail 创建者邮箱
    *
    * @return $this
    */
    public function setAuthorEmail($authorEmail)
    {
        $this->container['authorEmail'] = $authorEmail;
        return $this;
    }

    /**
    * Gets committedDate
    *  代码提交的日期和时间
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
    * @param string|null $committedDate 代码提交的日期和时间
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
    *  提交者名称
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
    * @param string|null $committerName 提交者名称
    *
    * @return $this
    */
    public function setCommitterName($committerName)
    {
        $this->container['committerName'] = $committerName;
        return $this;
    }

    /**
    * Gets committerEmail
    *  提交者邮箱
    *
    * @return string|null
    */
    public function getCommitterEmail()
    {
        return $this->container['committerEmail'];
    }

    /**
    * Sets committerEmail
    *
    * @param string|null $committerEmail 提交者邮箱
    *
    * @return $this
    */
    public function setCommitterEmail($committerEmail)
    {
        $this->container['committerEmail'] = $committerEmail;
        return $this;
    }

    /**
    * Gets openGpgVerified
    *  是否打开gpg校验
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
    * @param bool|null $openGpgVerified 是否打开gpg校验
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
    *  验证状态
    *
    * @return int|null
    */
    public function getVerificationStatus()
    {
        return $this->container['verificationStatus'];
    }

    /**
    * Sets verificationStatus
    *
    * @param int|null $verificationStatus 验证状态
    *
    * @return $this
    */
    public function setVerificationStatus($verificationStatus)
    {
        $this->container['verificationStatus'] = $verificationStatus;
        return $this;
    }

    /**
    * Gets gpgPrimaryKeyId
    *  GPG公钥的标识符
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
    * @param string|null $gpgPrimaryKeyId GPG公钥的标识符
    *
    * @return $this
    */
    public function setGpgPrimaryKeyId($gpgPrimaryKeyId)
    {
        $this->container['gpgPrimaryKeyId'] = $gpgPrimaryKeyId;
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
    * Gets gpgNickName
    *  昵称
    *
    * @return string|null
    */
    public function getGpgNickName()
    {
        return $this->container['gpgNickName'];
    }

    /**
    * Sets gpgNickName
    *
    * @param string|null $gpgNickName 昵称
    *
    * @return $this
    */
    public function setGpgNickName($gpgNickName)
    {
        $this->container['gpgNickName'] = $gpgNickName;
        return $this;
    }

    /**
    * Gets gpgTenantName
    *  租户名
    *
    * @return string|null
    */
    public function getGpgTenantName()
    {
        return $this->container['gpgTenantName'];
    }

    /**
    * Sets gpgTenantName
    *
    * @param string|null $gpgTenantName 租户名
    *
    * @return $this
    */
    public function setGpgTenantName($gpgTenantName)
    {
        $this->container['gpgTenantName'] = $gpgTenantName;
        return $this;
    }

    /**
    * Gets gpgUserName
    *  特定GPG用户相关的信息
    *
    * @return string|null
    */
    public function getGpgUserName()
    {
        return $this->container['gpgUserName'];
    }

    /**
    * Sets gpgUserName
    *
    * @param string|null $gpgUserName 特定GPG用户相关的信息
    *
    * @return $this
    */
    public function setGpgUserName($gpgUserName)
    {
        $this->container['gpgUserName'] = $gpgUserName;
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

