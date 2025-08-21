<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCommitResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCommitResponse';

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
    * shortId  短id
    * createdAt  创建时间
    * title  标题
    * authorAvatarUrl  author_avatar_url
    * committerAvatarUrl  committer_avatar_url
    * relateUrl  only for DevCloud
    * nickName  标题
    * tenantName  tenant_name
    * userName  用户名
    * stats  stats
    * status  **参数解释：** 状态。 **取值范围：** 不涉及。
    * lastPipeline  lastPipeline
    * projectId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * mergeRequest  mergeRequest
    * codeChanges  **参数解释：** 代码变更内容。 **取值范围：** 不涉及。
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
            'gpgUserName' => 'string',
            'shortId' => 'string',
            'createdAt' => 'string',
            'title' => 'string',
            'authorAvatarUrl' => 'string',
            'committerAvatarUrl' => 'string',
            'relateUrl' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RelatedCommitSimpleDto[]',
            'nickName' => 'string',
            'tenantName' => 'string',
            'userName' => 'string',
            'stats' => '\HuaweiCloud\SDK\CodeHub\V4\Model\CommitStatsDto',
            'status' => 'string',
            'lastPipeline' => '\HuaweiCloud\SDK\CodeHub\V4\Model\PipelineBasicDto',
            'projectId' => 'int',
            'mergeRequest' => '\HuaweiCloud\SDK\CodeHub\V4\Model\SimpleMergeRequestDetailDto',
            'codeChanges' => '\HuaweiCloud\SDK\CodeHub\V4\Model\SimpleDiffDto[]'
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
    * shortId  短id
    * createdAt  创建时间
    * title  标题
    * authorAvatarUrl  author_avatar_url
    * committerAvatarUrl  committer_avatar_url
    * relateUrl  only for DevCloud
    * nickName  标题
    * tenantName  tenant_name
    * userName  用户名
    * stats  stats
    * status  **参数解释：** 状态。 **取值范围：** 不涉及。
    * lastPipeline  lastPipeline
    * projectId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * mergeRequest  mergeRequest
    * codeChanges  **参数解释：** 代码变更内容。 **取值范围：** 不涉及。
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
        'gpgUserName' => null,
        'shortId' => null,
        'createdAt' => null,
        'title' => null,
        'authorAvatarUrl' => null,
        'committerAvatarUrl' => null,
        'relateUrl' => null,
        'nickName' => null,
        'tenantName' => null,
        'userName' => null,
        'stats' => null,
        'status' => null,
        'lastPipeline' => null,
        'projectId' => null,
        'mergeRequest' => null,
        'codeChanges' => null
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
    * shortId  短id
    * createdAt  创建时间
    * title  标题
    * authorAvatarUrl  author_avatar_url
    * committerAvatarUrl  committer_avatar_url
    * relateUrl  only for DevCloud
    * nickName  标题
    * tenantName  tenant_name
    * userName  用户名
    * stats  stats
    * status  **参数解释：** 状态。 **取值范围：** 不涉及。
    * lastPipeline  lastPipeline
    * projectId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * mergeRequest  mergeRequest
    * codeChanges  **参数解释：** 代码变更内容。 **取值范围：** 不涉及。
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
            'gpgUserName' => 'gpg_user_name',
            'shortId' => 'short_id',
            'createdAt' => 'created_at',
            'title' => 'title',
            'authorAvatarUrl' => 'author_avatar_url',
            'committerAvatarUrl' => 'committer_avatar_url',
            'relateUrl' => 'relate_url',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name',
            'userName' => 'user_name',
            'stats' => 'stats',
            'status' => 'status',
            'lastPipeline' => 'last_pipeline',
            'projectId' => 'project_id',
            'mergeRequest' => 'merge_request',
            'codeChanges' => 'code_changes'
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
    * shortId  短id
    * createdAt  创建时间
    * title  标题
    * authorAvatarUrl  author_avatar_url
    * committerAvatarUrl  committer_avatar_url
    * relateUrl  only for DevCloud
    * nickName  标题
    * tenantName  tenant_name
    * userName  用户名
    * stats  stats
    * status  **参数解释：** 状态。 **取值范围：** 不涉及。
    * lastPipeline  lastPipeline
    * projectId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * mergeRequest  mergeRequest
    * codeChanges  **参数解释：** 代码变更内容。 **取值范围：** 不涉及。
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
            'gpgUserName' => 'setGpgUserName',
            'shortId' => 'setShortId',
            'createdAt' => 'setCreatedAt',
            'title' => 'setTitle',
            'authorAvatarUrl' => 'setAuthorAvatarUrl',
            'committerAvatarUrl' => 'setCommitterAvatarUrl',
            'relateUrl' => 'setRelateUrl',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName',
            'userName' => 'setUserName',
            'stats' => 'setStats',
            'status' => 'setStatus',
            'lastPipeline' => 'setLastPipeline',
            'projectId' => 'setProjectId',
            'mergeRequest' => 'setMergeRequest',
            'codeChanges' => 'setCodeChanges'
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
    * shortId  短id
    * createdAt  创建时间
    * title  标题
    * authorAvatarUrl  author_avatar_url
    * committerAvatarUrl  committer_avatar_url
    * relateUrl  only for DevCloud
    * nickName  标题
    * tenantName  tenant_name
    * userName  用户名
    * stats  stats
    * status  **参数解释：** 状态。 **取值范围：** 不涉及。
    * lastPipeline  lastPipeline
    * projectId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * mergeRequest  mergeRequest
    * codeChanges  **参数解释：** 代码变更内容。 **取值范围：** 不涉及。
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
            'gpgUserName' => 'getGpgUserName',
            'shortId' => 'getShortId',
            'createdAt' => 'getCreatedAt',
            'title' => 'getTitle',
            'authorAvatarUrl' => 'getAuthorAvatarUrl',
            'committerAvatarUrl' => 'getCommitterAvatarUrl',
            'relateUrl' => 'getRelateUrl',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName',
            'userName' => 'getUserName',
            'stats' => 'getStats',
            'status' => 'getStatus',
            'lastPipeline' => 'getLastPipeline',
            'projectId' => 'getProjectId',
            'mergeRequest' => 'getMergeRequest',
            'codeChanges' => 'getCodeChanges'
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
        $this->container['shortId'] = isset($data['shortId']) ? $data['shortId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['authorAvatarUrl'] = isset($data['authorAvatarUrl']) ? $data['authorAvatarUrl'] : null;
        $this->container['committerAvatarUrl'] = isset($data['committerAvatarUrl']) ? $data['committerAvatarUrl'] : null;
        $this->container['relateUrl'] = isset($data['relateUrl']) ? $data['relateUrl'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastPipeline'] = isset($data['lastPipeline']) ? $data['lastPipeline'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['mergeRequest'] = isset($data['mergeRequest']) ? $data['mergeRequest'] : null;
        $this->container['codeChanges'] = isset($data['codeChanges']) ? $data['codeChanges'] : null;
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
            if (!is_null($this->container['shortId']) && (mb_strlen($this->container['shortId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'shortId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['shortId']) && (mb_strlen($this->container['shortId']) < 1)) {
                $invalidProperties[] = "invalid value for 'shortId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 100000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 100000)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorAvatarUrl']) && (mb_strlen($this->container['authorAvatarUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'authorAvatarUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['authorAvatarUrl']) && (mb_strlen($this->container['authorAvatarUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorAvatarUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['committerAvatarUrl']) && (mb_strlen($this->container['committerAvatarUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'committerAvatarUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['committerAvatarUrl']) && (mb_strlen($this->container['committerAvatarUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'committerAvatarUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
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
    * Gets shortId
    *  短id
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
    * @param string|null $shortId 短id
    *
    * @return $this
    */
    public function setShortId($shortId)
    {
        $this->container['shortId'] = $shortId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
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
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets title
    *  标题
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
    * @param string|null $title 标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets authorAvatarUrl
    *  author_avatar_url
    *
    * @return string|null
    */
    public function getAuthorAvatarUrl()
    {
        return $this->container['authorAvatarUrl'];
    }

    /**
    * Sets authorAvatarUrl
    *
    * @param string|null $authorAvatarUrl author_avatar_url
    *
    * @return $this
    */
    public function setAuthorAvatarUrl($authorAvatarUrl)
    {
        $this->container['authorAvatarUrl'] = $authorAvatarUrl;
        return $this;
    }

    /**
    * Gets committerAvatarUrl
    *  committer_avatar_url
    *
    * @return string|null
    */
    public function getCommitterAvatarUrl()
    {
        return $this->container['committerAvatarUrl'];
    }

    /**
    * Sets committerAvatarUrl
    *
    * @param string|null $committerAvatarUrl committer_avatar_url
    *
    * @return $this
    */
    public function setCommitterAvatarUrl($committerAvatarUrl)
    {
        $this->container['committerAvatarUrl'] = $committerAvatarUrl;
        return $this;
    }

    /**
    * Gets relateUrl
    *  only for DevCloud
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RelatedCommitSimpleDto[]|null
    */
    public function getRelateUrl()
    {
        return $this->container['relateUrl'];
    }

    /**
    * Sets relateUrl
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RelatedCommitSimpleDto[]|null $relateUrl only for DevCloud
    *
    * @return $this
    */
    public function setRelateUrl($relateUrl)
    {
        $this->container['relateUrl'] = $relateUrl;
        return $this;
    }

    /**
    * Gets nickName
    *  标题
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
    * @param string|null $nickName 标题
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
    *  tenant_name
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
    * @param string|null $tenantName tenant_name
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
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
    * Gets stats
    *  stats
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\CommitStatsDto|null
    */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
    * Sets stats
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\CommitStatsDto|null $stats stats
    *
    * @return $this
    */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 状态。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 状态。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastPipeline
    *  lastPipeline
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\PipelineBasicDto|null
    */
    public function getLastPipeline()
    {
        return $this->container['lastPipeline'];
    }

    /**
    * Sets lastPipeline
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\PipelineBasicDto|null $lastPipeline lastPipeline
    *
    * @return $this
    */
    public function setLastPipeline($lastPipeline)
    {
        $this->container['lastPipeline'] = $lastPipeline;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets mergeRequest
    *  mergeRequest
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\SimpleMergeRequestDetailDto|null
    */
    public function getMergeRequest()
    {
        return $this->container['mergeRequest'];
    }

    /**
    * Sets mergeRequest
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\SimpleMergeRequestDetailDto|null $mergeRequest mergeRequest
    *
    * @return $this
    */
    public function setMergeRequest($mergeRequest)
    {
        $this->container['mergeRequest'] = $mergeRequest;
        return $this;
    }

    /**
    * Gets codeChanges
    *  **参数解释：** 代码变更内容。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\SimpleDiffDto[]|null
    */
    public function getCodeChanges()
    {
        return $this->container['codeChanges'];
    }

    /**
    * Sets codeChanges
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\SimpleDiffDto[]|null $codeChanges **参数解释：** 代码变更内容。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCodeChanges($codeChanges)
    {
        $this->container['codeChanges'] = $codeChanges;
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

