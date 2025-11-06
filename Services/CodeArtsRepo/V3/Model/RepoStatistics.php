<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addLines  添加代码行
    * branch  分支名
    * commitCount  提交次数
    * createdAt  仓库统计创建的时间
    * deleteLines  删除代码行
    * id  仓库统计记录id
    * projectId  仓库id
    * updatedAt  仓库统计更新的时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addLines' => 'int',
            'branch' => 'string',
            'commitCount' => 'int',
            'createdAt' => '\DateTime',
            'deleteLines' => 'int',
            'id' => 'int',
            'projectId' => 'int',
            'updatedAt' => '\DateTime',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addLines  添加代码行
    * branch  分支名
    * commitCount  提交次数
    * createdAt  仓库统计创建的时间
    * deleteLines  删除代码行
    * id  仓库统计记录id
    * projectId  仓库id
    * updatedAt  仓库统计更新的时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addLines' => 'int32',
        'branch' => null,
        'commitCount' => 'int32',
        'createdAt' => 'date-time',
        'deleteLines' => 'int32',
        'id' => 'int32',
        'projectId' => 'int32',
        'updatedAt' => 'date-time',
        'userName' => null
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
    * addLines  添加代码行
    * branch  分支名
    * commitCount  提交次数
    * createdAt  仓库统计创建的时间
    * deleteLines  删除代码行
    * id  仓库统计记录id
    * projectId  仓库id
    * updatedAt  仓库统计更新的时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addLines' => 'add_lines',
            'branch' => 'branch',
            'commitCount' => 'commit_count',
            'createdAt' => 'created_at',
            'deleteLines' => 'delete_lines',
            'id' => 'id',
            'projectId' => 'project_id',
            'updatedAt' => 'updated_at',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addLines  添加代码行
    * branch  分支名
    * commitCount  提交次数
    * createdAt  仓库统计创建的时间
    * deleteLines  删除代码行
    * id  仓库统计记录id
    * projectId  仓库id
    * updatedAt  仓库统计更新的时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $setters = [
            'addLines' => 'setAddLines',
            'branch' => 'setBranch',
            'commitCount' => 'setCommitCount',
            'createdAt' => 'setCreatedAt',
            'deleteLines' => 'setDeleteLines',
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'updatedAt' => 'setUpdatedAt',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addLines  添加代码行
    * branch  分支名
    * commitCount  提交次数
    * createdAt  仓库统计创建的时间
    * deleteLines  删除代码行
    * id  仓库统计记录id
    * projectId  仓库id
    * updatedAt  仓库统计更新的时间
    * userName  用户名
    *
    * @var string[]
    */
    protected static $getters = [
            'addLines' => 'getAddLines',
            'branch' => 'getBranch',
            'commitCount' => 'getCommitCount',
            'createdAt' => 'getCreatedAt',
            'deleteLines' => 'getDeleteLines',
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'updatedAt' => 'getUpdatedAt',
            'userName' => 'getUserName'
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
        $this->container['addLines'] = isset($data['addLines']) ? $data['addLines'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['commitCount'] = isset($data['commitCount']) ? $data['commitCount'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['deleteLines'] = isset($data['deleteLines']) ? $data['deleteLines'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['branch']) && (mb_strlen($this->container['branch']) > 260)) {
                $invalidProperties[] = "invalid value for 'branch', the character length must be smaller than or equal to 260.";
            }
            if (!is_null($this->container['branch']) && (mb_strlen($this->container['branch']) < 1)) {
                $invalidProperties[] = "invalid value for 'branch', the character length must be bigger than or equal to 1.";
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
    * Gets addLines
    *  添加代码行
    *
    * @return int|null
    */
    public function getAddLines()
    {
        return $this->container['addLines'];
    }

    /**
    * Sets addLines
    *
    * @param int|null $addLines 添加代码行
    *
    * @return $this
    */
    public function setAddLines($addLines)
    {
        $this->container['addLines'] = $addLines;
        return $this;
    }

    /**
    * Gets branch
    *  分支名
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch 分支名
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets commitCount
    *  提交次数
    *
    * @return int|null
    */
    public function getCommitCount()
    {
        return $this->container['commitCount'];
    }

    /**
    * Sets commitCount
    *
    * @param int|null $commitCount 提交次数
    *
    * @return $this
    */
    public function setCommitCount($commitCount)
    {
        $this->container['commitCount'] = $commitCount;
        return $this;
    }

    /**
    * Gets createdAt
    *  仓库统计创建的时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 仓库统计创建的时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets deleteLines
    *  删除代码行
    *
    * @return int|null
    */
    public function getDeleteLines()
    {
        return $this->container['deleteLines'];
    }

    /**
    * Sets deleteLines
    *
    * @param int|null $deleteLines 删除代码行
    *
    * @return $this
    */
    public function setDeleteLines($deleteLines)
    {
        $this->container['deleteLines'] = $deleteLines;
        return $this;
    }

    /**
    * Gets id
    *  仓库统计记录id
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
    * @param int|null $id 仓库统计记录id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  仓库id
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
    * @param int|null $projectId 仓库id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets updatedAt
    *  仓库统计更新的时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 仓库统计更新的时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

