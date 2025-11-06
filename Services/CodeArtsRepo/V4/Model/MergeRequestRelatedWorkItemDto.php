<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestRelatedWorkItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestRelatedWorkItemDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  关联id
    * userId  用户id
    * repoId  仓库id
    * mergeRequestId  合并请求id
    * targetBranch  目标分支
    * sourceBranch  源分支
    * mergeRequestTitle  合并请求标题
    * mergeRequestUrl  合并请求url
    * mergeRequestState  合并请求状态
    * relatedId  关联单id
    * relatedTitle  关联单标题
    * relatedUrl  关联单url
    * result  关联结果
    * message  关联结果信息
    * createAt  创建时间
    * updateAt  更新时间
    * subject  话题
    * tracker  跟单人
    * status  状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'userId' => 'string',
            'repoId' => 'int',
            'mergeRequestId' => 'int',
            'targetBranch' => 'string',
            'sourceBranch' => 'string',
            'mergeRequestTitle' => 'string',
            'mergeRequestUrl' => 'string',
            'mergeRequestState' => 'string',
            'relatedId' => 'string',
            'relatedTitle' => 'string',
            'relatedUrl' => 'string',
            'result' => 'int',
            'message' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string',
            'subject' => 'string',
            'tracker' => 'object',
            'status' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  关联id
    * userId  用户id
    * repoId  仓库id
    * mergeRequestId  合并请求id
    * targetBranch  目标分支
    * sourceBranch  源分支
    * mergeRequestTitle  合并请求标题
    * mergeRequestUrl  合并请求url
    * mergeRequestState  合并请求状态
    * relatedId  关联单id
    * relatedTitle  关联单标题
    * relatedUrl  关联单url
    * result  关联结果
    * message  关联结果信息
    * createAt  创建时间
    * updateAt  更新时间
    * subject  话题
    * tracker  跟单人
    * status  状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'userId' => null,
        'repoId' => null,
        'mergeRequestId' => null,
        'targetBranch' => null,
        'sourceBranch' => null,
        'mergeRequestTitle' => null,
        'mergeRequestUrl' => null,
        'mergeRequestState' => null,
        'relatedId' => null,
        'relatedTitle' => null,
        'relatedUrl' => null,
        'result' => null,
        'message' => null,
        'createAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updateAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'subject' => null,
        'tracker' => null,
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
    * id  关联id
    * userId  用户id
    * repoId  仓库id
    * mergeRequestId  合并请求id
    * targetBranch  目标分支
    * sourceBranch  源分支
    * mergeRequestTitle  合并请求标题
    * mergeRequestUrl  合并请求url
    * mergeRequestState  合并请求状态
    * relatedId  关联单id
    * relatedTitle  关联单标题
    * relatedUrl  关联单url
    * result  关联结果
    * message  关联结果信息
    * createAt  创建时间
    * updateAt  更新时间
    * subject  话题
    * tracker  跟单人
    * status  状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userId' => 'user_id',
            'repoId' => 'repo_id',
            'mergeRequestId' => 'merge_request_id',
            'targetBranch' => 'target_branch',
            'sourceBranch' => 'source_branch',
            'mergeRequestTitle' => 'merge_request_title',
            'mergeRequestUrl' => 'merge_request_url',
            'mergeRequestState' => 'merge_request_state',
            'relatedId' => 'related_id',
            'relatedTitle' => 'related_title',
            'relatedUrl' => 'related_url',
            'result' => 'result',
            'message' => 'message',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'subject' => 'subject',
            'tracker' => 'tracker',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  关联id
    * userId  用户id
    * repoId  仓库id
    * mergeRequestId  合并请求id
    * targetBranch  目标分支
    * sourceBranch  源分支
    * mergeRequestTitle  合并请求标题
    * mergeRequestUrl  合并请求url
    * mergeRequestState  合并请求状态
    * relatedId  关联单id
    * relatedTitle  关联单标题
    * relatedUrl  关联单url
    * result  关联结果
    * message  关联结果信息
    * createAt  创建时间
    * updateAt  更新时间
    * subject  话题
    * tracker  跟单人
    * status  状态
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userId' => 'setUserId',
            'repoId' => 'setRepoId',
            'mergeRequestId' => 'setMergeRequestId',
            'targetBranch' => 'setTargetBranch',
            'sourceBranch' => 'setSourceBranch',
            'mergeRequestTitle' => 'setMergeRequestTitle',
            'mergeRequestUrl' => 'setMergeRequestUrl',
            'mergeRequestState' => 'setMergeRequestState',
            'relatedId' => 'setRelatedId',
            'relatedTitle' => 'setRelatedTitle',
            'relatedUrl' => 'setRelatedUrl',
            'result' => 'setResult',
            'message' => 'setMessage',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'subject' => 'setSubject',
            'tracker' => 'setTracker',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  关联id
    * userId  用户id
    * repoId  仓库id
    * mergeRequestId  合并请求id
    * targetBranch  目标分支
    * sourceBranch  源分支
    * mergeRequestTitle  合并请求标题
    * mergeRequestUrl  合并请求url
    * mergeRequestState  合并请求状态
    * relatedId  关联单id
    * relatedTitle  关联单标题
    * relatedUrl  关联单url
    * result  关联结果
    * message  关联结果信息
    * createAt  创建时间
    * updateAt  更新时间
    * subject  话题
    * tracker  跟单人
    * status  状态
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userId' => 'getUserId',
            'repoId' => 'getRepoId',
            'mergeRequestId' => 'getMergeRequestId',
            'targetBranch' => 'getTargetBranch',
            'sourceBranch' => 'getSourceBranch',
            'mergeRequestTitle' => 'getMergeRequestTitle',
            'mergeRequestUrl' => 'getMergeRequestUrl',
            'mergeRequestState' => 'getMergeRequestState',
            'relatedId' => 'getRelatedId',
            'relatedTitle' => 'getRelatedTitle',
            'relatedUrl' => 'getRelatedUrl',
            'result' => 'getResult',
            'message' => 'getMessage',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'subject' => 'getSubject',
            'tracker' => 'getTracker',
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['mergeRequestTitle'] = isset($data['mergeRequestTitle']) ? $data['mergeRequestTitle'] : null;
        $this->container['mergeRequestUrl'] = isset($data['mergeRequestUrl']) ? $data['mergeRequestUrl'] : null;
        $this->container['mergeRequestState'] = isset($data['mergeRequestState']) ? $data['mergeRequestState'] : null;
        $this->container['relatedId'] = isset($data['relatedId']) ? $data['relatedId'] : null;
        $this->container['relatedTitle'] = isset($data['relatedTitle']) ? $data['relatedTitle'] : null;
        $this->container['relatedUrl'] = isset($data['relatedUrl']) ? $data['relatedUrl'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
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
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repoId']) && ($this->container['repoId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repoId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repoId']) && ($this->container['repoId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repoId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetBranch']) && (mb_strlen($this->container['targetBranch']) > 100000)) {
                $invalidProperties[] = "invalid value for 'targetBranch', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['targetBranch']) && (mb_strlen($this->container['targetBranch']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetBranch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceBranch']) && (mb_strlen($this->container['sourceBranch']) > 100000)) {
                $invalidProperties[] = "invalid value for 'sourceBranch', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['sourceBranch']) && (mb_strlen($this->container['sourceBranch']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceBranch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestTitle']) && (mb_strlen($this->container['mergeRequestTitle']) > 100000)) {
                $invalidProperties[] = "invalid value for 'mergeRequestTitle', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['mergeRequestTitle']) && (mb_strlen($this->container['mergeRequestTitle']) < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestTitle', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestUrl']) && (mb_strlen($this->container['mergeRequestUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'mergeRequestUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['mergeRequestUrl']) && (mb_strlen($this->container['mergeRequestUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestState']) && (mb_strlen($this->container['mergeRequestState']) > 100000)) {
                $invalidProperties[] = "invalid value for 'mergeRequestState', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['mergeRequestState']) && (mb_strlen($this->container['mergeRequestState']) < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestState', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['relatedId']) && (mb_strlen($this->container['relatedId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'relatedId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['relatedId']) && (mb_strlen($this->container['relatedId']) < 1)) {
                $invalidProperties[] = "invalid value for 'relatedId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['relatedTitle']) && (mb_strlen($this->container['relatedTitle']) > 100000)) {
                $invalidProperties[] = "invalid value for 'relatedTitle', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['relatedTitle']) && (mb_strlen($this->container['relatedTitle']) < 1)) {
                $invalidProperties[] = "invalid value for 'relatedTitle', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['relatedUrl']) && (mb_strlen($this->container['relatedUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'relatedUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['relatedUrl']) && (mb_strlen($this->container['relatedUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'relatedUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 100000)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 100000)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 1)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 1.";
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
    *  关联id
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
    * @param int|null $id 关联id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
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
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets repoId
    *  仓库id
    *
    * @return int|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param int|null $repoId 仓库id
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets mergeRequestId
    *  合并请求id
    *
    * @return int|null
    */
    public function getMergeRequestId()
    {
        return $this->container['mergeRequestId'];
    }

    /**
    * Sets mergeRequestId
    *
    * @param int|null $mergeRequestId 合并请求id
    *
    * @return $this
    */
    public function setMergeRequestId($mergeRequestId)
    {
        $this->container['mergeRequestId'] = $mergeRequestId;
        return $this;
    }

    /**
    * Gets targetBranch
    *  目标分支
    *
    * @return string|null
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string|null $targetBranch 目标分支
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  源分支
    *
    * @return string|null
    */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
    * Sets sourceBranch
    *
    * @param string|null $sourceBranch 源分支
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets mergeRequestTitle
    *  合并请求标题
    *
    * @return string|null
    */
    public function getMergeRequestTitle()
    {
        return $this->container['mergeRequestTitle'];
    }

    /**
    * Sets mergeRequestTitle
    *
    * @param string|null $mergeRequestTitle 合并请求标题
    *
    * @return $this
    */
    public function setMergeRequestTitle($mergeRequestTitle)
    {
        $this->container['mergeRequestTitle'] = $mergeRequestTitle;
        return $this;
    }

    /**
    * Gets mergeRequestUrl
    *  合并请求url
    *
    * @return string|null
    */
    public function getMergeRequestUrl()
    {
        return $this->container['mergeRequestUrl'];
    }

    /**
    * Sets mergeRequestUrl
    *
    * @param string|null $mergeRequestUrl 合并请求url
    *
    * @return $this
    */
    public function setMergeRequestUrl($mergeRequestUrl)
    {
        $this->container['mergeRequestUrl'] = $mergeRequestUrl;
        return $this;
    }

    /**
    * Gets mergeRequestState
    *  合并请求状态
    *
    * @return string|null
    */
    public function getMergeRequestState()
    {
        return $this->container['mergeRequestState'];
    }

    /**
    * Sets mergeRequestState
    *
    * @param string|null $mergeRequestState 合并请求状态
    *
    * @return $this
    */
    public function setMergeRequestState($mergeRequestState)
    {
        $this->container['mergeRequestState'] = $mergeRequestState;
        return $this;
    }

    /**
    * Gets relatedId
    *  关联单id
    *
    * @return string|null
    */
    public function getRelatedId()
    {
        return $this->container['relatedId'];
    }

    /**
    * Sets relatedId
    *
    * @param string|null $relatedId 关联单id
    *
    * @return $this
    */
    public function setRelatedId($relatedId)
    {
        $this->container['relatedId'] = $relatedId;
        return $this;
    }

    /**
    * Gets relatedTitle
    *  关联单标题
    *
    * @return string|null
    */
    public function getRelatedTitle()
    {
        return $this->container['relatedTitle'];
    }

    /**
    * Sets relatedTitle
    *
    * @param string|null $relatedTitle 关联单标题
    *
    * @return $this
    */
    public function setRelatedTitle($relatedTitle)
    {
        $this->container['relatedTitle'] = $relatedTitle;
        return $this;
    }

    /**
    * Gets relatedUrl
    *  关联单url
    *
    * @return string|null
    */
    public function getRelatedUrl()
    {
        return $this->container['relatedUrl'];
    }

    /**
    * Sets relatedUrl
    *
    * @param string|null $relatedUrl 关联单url
    *
    * @return $this
    */
    public function setRelatedUrl($relatedUrl)
    {
        $this->container['relatedUrl'] = $relatedUrl;
        return $this;
    }

    /**
    * Gets result
    *  关联结果
    *
    * @return int|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param int|null $result 关联结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets message
    *  关联结果信息
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
    * @param string|null $message 关联结果信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets subject
    *  话题
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 话题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets tracker
    *  跟单人
    *
    * @return object|null
    */
    public function getTracker()
    {
        return $this->container['tracker'];
    }

    /**
    * Sets tracker
    *
    * @param object|null $tracker 跟单人
    *
    * @return $this
    */
    public function setTracker($tracker)
    {
        $this->container['tracker'] = $tracker;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return object|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param object|null $status 状态
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

