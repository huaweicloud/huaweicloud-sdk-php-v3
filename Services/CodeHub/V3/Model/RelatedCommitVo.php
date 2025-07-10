<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RelatedCommitVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RelatedCommitVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主键ID
    * iamId  用户ID
    * userName  用户名称
    * repositoryId  仓库ID
    * type  类型
    * userId  用户ID
    * branchName  分支名称
    * commitId  Commit ID
    * commitShortId  Commit 短ID
    * commitMsg  提交信息
    * commitUrl  提交URL
    * commitType  提交类型
    * relatedId  relatedId
    * createAt  创建时间
    * updateAt  更新时间
    * relatedUrl  relatedUrl
    * message  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'iamId' => 'string',
            'userName' => 'string',
            'repositoryId' => 'string',
            'type' => 'string',
            'userId' => 'string',
            'branchName' => 'string',
            'commitId' => 'string',
            'commitShortId' => 'string',
            'commitMsg' => 'string',
            'commitUrl' => 'string',
            'commitType' => 'string',
            'relatedId' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string',
            'relatedUrl' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主键ID
    * iamId  用户ID
    * userName  用户名称
    * repositoryId  仓库ID
    * type  类型
    * userId  用户ID
    * branchName  分支名称
    * commitId  Commit ID
    * commitShortId  Commit 短ID
    * commitMsg  提交信息
    * commitUrl  提交URL
    * commitType  提交类型
    * relatedId  relatedId
    * createAt  创建时间
    * updateAt  更新时间
    * relatedUrl  relatedUrl
    * message  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'iamId' => null,
        'userName' => null,
        'repositoryId' => null,
        'type' => null,
        'userId' => null,
        'branchName' => null,
        'commitId' => null,
        'commitShortId' => null,
        'commitMsg' => null,
        'commitUrl' => null,
        'commitType' => null,
        'relatedId' => null,
        'createAt' => null,
        'updateAt' => null,
        'relatedUrl' => null,
        'message' => null
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
    * id  主键ID
    * iamId  用户ID
    * userName  用户名称
    * repositoryId  仓库ID
    * type  类型
    * userId  用户ID
    * branchName  分支名称
    * commitId  Commit ID
    * commitShortId  Commit 短ID
    * commitMsg  提交信息
    * commitUrl  提交URL
    * commitType  提交类型
    * relatedId  relatedId
    * createAt  创建时间
    * updateAt  更新时间
    * relatedUrl  relatedUrl
    * message  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'iamId' => 'iamId',
            'userName' => 'userName',
            'repositoryId' => 'repositoryId',
            'type' => 'type',
            'userId' => 'userId',
            'branchName' => 'branchName',
            'commitId' => 'commitId',
            'commitShortId' => 'commitShortId',
            'commitMsg' => 'commitMsg',
            'commitUrl' => 'commitUrl',
            'commitType' => 'commitType',
            'relatedId' => 'relatedId',
            'createAt' => 'createAt',
            'updateAt' => 'updateAt',
            'relatedUrl' => 'relatedUrl',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主键ID
    * iamId  用户ID
    * userName  用户名称
    * repositoryId  仓库ID
    * type  类型
    * userId  用户ID
    * branchName  分支名称
    * commitId  Commit ID
    * commitShortId  Commit 短ID
    * commitMsg  提交信息
    * commitUrl  提交URL
    * commitType  提交类型
    * relatedId  relatedId
    * createAt  创建时间
    * updateAt  更新时间
    * relatedUrl  relatedUrl
    * message  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'iamId' => 'setIamId',
            'userName' => 'setUserName',
            'repositoryId' => 'setRepositoryId',
            'type' => 'setType',
            'userId' => 'setUserId',
            'branchName' => 'setBranchName',
            'commitId' => 'setCommitId',
            'commitShortId' => 'setCommitShortId',
            'commitMsg' => 'setCommitMsg',
            'commitUrl' => 'setCommitUrl',
            'commitType' => 'setCommitType',
            'relatedId' => 'setRelatedId',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'relatedUrl' => 'setRelatedUrl',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主键ID
    * iamId  用户ID
    * userName  用户名称
    * repositoryId  仓库ID
    * type  类型
    * userId  用户ID
    * branchName  分支名称
    * commitId  Commit ID
    * commitShortId  Commit 短ID
    * commitMsg  提交信息
    * commitUrl  提交URL
    * commitType  提交类型
    * relatedId  relatedId
    * createAt  创建时间
    * updateAt  更新时间
    * relatedUrl  relatedUrl
    * message  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'iamId' => 'getIamId',
            'userName' => 'getUserName',
            'repositoryId' => 'getRepositoryId',
            'type' => 'getType',
            'userId' => 'getUserId',
            'branchName' => 'getBranchName',
            'commitId' => 'getCommitId',
            'commitShortId' => 'getCommitShortId',
            'commitMsg' => 'getCommitMsg',
            'commitUrl' => 'getCommitUrl',
            'commitType' => 'getCommitType',
            'relatedId' => 'getRelatedId',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'relatedUrl' => 'getRelatedUrl',
            'message' => 'getMessage'
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
        $this->container['iamId'] = isset($data['iamId']) ? $data['iamId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['commitShortId'] = isset($data['commitShortId']) ? $data['commitShortId'] : null;
        $this->container['commitMsg'] = isset($data['commitMsg']) ? $data['commitMsg'] : null;
        $this->container['commitUrl'] = isset($data['commitUrl']) ? $data['commitUrl'] : null;
        $this->container['commitType'] = isset($data['commitType']) ? $data['commitType'] : null;
        $this->container['relatedId'] = isset($data['relatedId']) ? $data['relatedId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['relatedUrl'] = isset($data['relatedUrl']) ? $data['relatedUrl'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    *  主键ID
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
    * @param string|null $id 主键ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets iamId
    *  用户ID
    *
    * @return string|null
    */
    public function getIamId()
    {
        return $this->container['iamId'];
    }

    /**
    * Sets iamId
    *
    * @param string|null $iamId 用户ID
    *
    * @return $this
    */
    public function setIamId($iamId)
    {
        $this->container['iamId'] = $iamId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
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
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets repositoryId
    *  仓库ID
    *
    * @return string|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param string|null $repositoryId 仓库ID
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
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
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets branchName
    *  分支名称
    *
    * @return string|null
    */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
    * Sets branchName
    *
    * @param string|null $branchName 分支名称
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets commitId
    *  Commit ID
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId Commit ID
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets commitShortId
    *  Commit 短ID
    *
    * @return string|null
    */
    public function getCommitShortId()
    {
        return $this->container['commitShortId'];
    }

    /**
    * Sets commitShortId
    *
    * @param string|null $commitShortId Commit 短ID
    *
    * @return $this
    */
    public function setCommitShortId($commitShortId)
    {
        $this->container['commitShortId'] = $commitShortId;
        return $this;
    }

    /**
    * Gets commitMsg
    *  提交信息
    *
    * @return string|null
    */
    public function getCommitMsg()
    {
        return $this->container['commitMsg'];
    }

    /**
    * Sets commitMsg
    *
    * @param string|null $commitMsg 提交信息
    *
    * @return $this
    */
    public function setCommitMsg($commitMsg)
    {
        $this->container['commitMsg'] = $commitMsg;
        return $this;
    }

    /**
    * Gets commitUrl
    *  提交URL
    *
    * @return string|null
    */
    public function getCommitUrl()
    {
        return $this->container['commitUrl'];
    }

    /**
    * Sets commitUrl
    *
    * @param string|null $commitUrl 提交URL
    *
    * @return $this
    */
    public function setCommitUrl($commitUrl)
    {
        $this->container['commitUrl'] = $commitUrl;
        return $this;
    }

    /**
    * Gets commitType
    *  提交类型
    *
    * @return string|null
    */
    public function getCommitType()
    {
        return $this->container['commitType'];
    }

    /**
    * Sets commitType
    *
    * @param string|null $commitType 提交类型
    *
    * @return $this
    */
    public function setCommitType($commitType)
    {
        $this->container['commitType'] = $commitType;
        return $this;
    }

    /**
    * Gets relatedId
    *  relatedId
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
    * @param string|null $relatedId relatedId
    *
    * @return $this
    */
    public function setRelatedId($relatedId)
    {
        $this->container['relatedId'] = $relatedId;
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
    * Gets relatedUrl
    *  relatedUrl
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
    * @param string|null $relatedUrl relatedUrl
    *
    * @return $this
    */
    public function setRelatedUrl($relatedUrl)
    {
        $this->container['relatedUrl'] = $relatedUrl;
        return $this;
    }

    /**
    * Gets message
    *  描述
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
    * @param string|null $message 描述
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

