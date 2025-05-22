<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommitRecordDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommitRecordDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  仓库ID
    * branchName  分支名称
    * commitId  commit id
    * commitShortId  commit short id
    * commitMsg  commit 信息
    * commitUrl  commit URL
    * user  user
    * type  查询的类型
    * createDate  创建时间
    * updateDate  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'string',
            'branchName' => 'string',
            'commitId' => 'string',
            'commitShortId' => 'string',
            'commitMsg' => 'string',
            'commitUrl' => 'string',
            'user' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser',
            'type' => 'string',
            'createDate' => 'string',
            'updateDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  仓库ID
    * branchName  分支名称
    * commitId  commit id
    * commitShortId  commit short id
    * commitMsg  commit 信息
    * commitUrl  commit URL
    * user  user
    * type  查询的类型
    * createDate  创建时间
    * updateDate  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'branchName' => null,
        'commitId' => null,
        'commitShortId' => null,
        'commitMsg' => null,
        'commitUrl' => null,
        'user' => null,
        'type' => null,
        'createDate' => null,
        'updateDate' => null
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
    * repositoryId  仓库ID
    * branchName  分支名称
    * commitId  commit id
    * commitShortId  commit short id
    * commitMsg  commit 信息
    * commitUrl  commit URL
    * user  user
    * type  查询的类型
    * createDate  创建时间
    * updateDate  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'branchName' => 'branch_name',
            'commitId' => 'commit_id',
            'commitShortId' => 'commit_short_id',
            'commitMsg' => 'commit_msg',
            'commitUrl' => 'commit_url',
            'user' => 'user',
            'type' => 'type',
            'createDate' => 'create_date',
            'updateDate' => 'update_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  仓库ID
    * branchName  分支名称
    * commitId  commit id
    * commitShortId  commit short id
    * commitMsg  commit 信息
    * commitUrl  commit URL
    * user  user
    * type  查询的类型
    * createDate  创建时间
    * updateDate  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'branchName' => 'setBranchName',
            'commitId' => 'setCommitId',
            'commitShortId' => 'setCommitShortId',
            'commitMsg' => 'setCommitMsg',
            'commitUrl' => 'setCommitUrl',
            'user' => 'setUser',
            'type' => 'setType',
            'createDate' => 'setCreateDate',
            'updateDate' => 'setUpdateDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  仓库ID
    * branchName  分支名称
    * commitId  commit id
    * commitShortId  commit short id
    * commitMsg  commit 信息
    * commitUrl  commit URL
    * user  user
    * type  查询的类型
    * createDate  创建时间
    * updateDate  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'branchName' => 'getBranchName',
            'commitId' => 'getCommitId',
            'commitShortId' => 'getCommitShortId',
            'commitMsg' => 'getCommitMsg',
            'commitUrl' => 'getCommitUrl',
            'user' => 'getUser',
            'type' => 'getType',
            'createDate' => 'getCreateDate',
            'updateDate' => 'getUpdateDate'
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['commitShortId'] = isset($data['commitShortId']) ? $data['commitShortId'] : null;
        $this->container['commitMsg'] = isset($data['commitMsg']) ? $data['commitMsg'] : null;
        $this->container['commitUrl'] = isset($data['commitUrl']) ? $data['commitUrl'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
        $this->container['updateDate'] = isset($data['updateDate']) ? $data['updateDate'] : null;
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
    *  commit id
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
    * @param string|null $commitId commit id
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
    *  commit short id
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
    * @param string|null $commitShortId commit short id
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
    *  commit 信息
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
    * @param string|null $commitMsg commit 信息
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
    *  commit URL
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
    * @param string|null $commitUrl commit URL
    *
    * @return $this
    */
    public function setCommitUrl($commitUrl)
    {
        $this->container['commitUrl'] = $commitUrl;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets type
    *  查询的类型
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
    * @param string|null $type 查询的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets createDate
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
    * Sets createDate
    *
    * @param string|null $createDate 创建时间
    *
    * @return $this
    */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;
        return $this;
    }

    /**
    * Gets updateDate
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateDate()
    {
        return $this->container['updateDate'];
    }

    /**
    * Sets updateDate
    *
    * @param string|null $updateDate 更新时间
    *
    * @return $this
    */
    public function setUpdateDate($updateDate)
    {
        $this->container['updateDate'] = $updateDate;
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

